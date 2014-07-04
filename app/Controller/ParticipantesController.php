<?php
App::uses('AppController', 'Controller');
/**
 * Participantes Controller
 *
 * @property Participante $Participante
 * @property PaginatorComponent $Paginator
 */
class ParticipantesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Participante->recursive = 0;
		$this->set('participantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
		$this->set('participante', $this->Participante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participante->create();
			print_r($this->request->data);
			exit(1);
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
			$this->request->data = $this->Participante->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participante->id = $id;
		if (!$this->Participante->exists()) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Participante->delete()) {
			$this->Session->setFlash(__('The participante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The participante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function createParticipante(){
		$this->layout = 'ajax';

		$data_post = $this->request->data;
		if (isset($data_post) and !empty($data_post)) {
			
			$cedula     = $data_post["cedula"];


			$this->Participante->recursive = 0;
			$existe = $this->Participante->find('first',array(
				'fields' =>array('cedula','nick','colombia','brasil','ganador'),
				'conditions' => array('cedula' => $cedula)
				));

			if (empty($existe)) {
				$nick   	=$data_post["nick"];
			    $colombia   =$data_post["colombia"];
			    $brasil     =$data_post["brasil"];
			    $ganador    =$data_post["ganador"];

			    $participante["Participante"] = array(
					'cedula' => $cedula, 
					'nick' => $nick,
					'colombia' => $colombia,
					'brasil' => $brasil,
					'ganador' => $ganador,
				);

			    $this->Participante->save($participante);	
				$this->set("estado","nuevo");
			    $this->set("data",$participante);
			}else{
				$this->set("estado","existe");
				$this->set("data",$existe);
			}

		    

		}

			

		
	}
}
