<?php
class Students extends Controller {

    public function __construct() {
        $this->studentModel = $this->model('Student');
    }

    public function index() {
        $students = $this->studentModel->findAllStudents();
        $data = [
            'students' => $students
        ];
        $this->view('students/index', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/students");
        }

        $data = [
            'CNE' =>'',
            'Nom' => '',
            'Prenom' => '',
            'Adresse' => '',
            'Ville' => '',
            'Email' => '',
            'CNEError' => '',
            'NomError' => '',
            'PrenomError' => '',
            'AdresseError' => '',
            'VilleError' => '',
            'EmailError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'CNE' => trim($_POST['CNE']),
                'Nom' => trim($_POST['Nom']),
                'Prenom' => trim($_POST['Prenom']),
                'Adresse' => trim($_POST['Adresse']),
                'Ville' => trim($_POST['Ville']),
                'Email' => trim($_POST['Email']),
                'CNEError' => '',
                'NomError' => '',
                'PrenomError' => '',
                'AdresseError' => '',
                'VilleError' => '',
                'EmailError' => ''
            ];

            if(empty($data['CNE'])) {
                $data['CNEError'] = 'The CNE of a student cannot be empty';
            }

            if(empty($data['Nom'])) {
                $data['NomError'] = 'The Nom of a student cannot be empty';
            }

            if(empty($data['Prenom'])) {
                $data['PrenomError'] = 'The Prenom of a student cannot be empty';
            }

            if(empty($data['Adresse'])) {
                $data['AdresseError'] = 'The Adresse of a student cannot be empty';
            }

            if(empty($data['Ville'])) {
                $data['VilleError'] = 'The Ville of a student cannot be empty';
            }

            if(empty($data['Email'])) {
                $data['EmailError'] = 'The Email of a student cannot be empty';
            }

            if (empty($data['CNEError']) && empty($data['NomError']) && empty($data['PrenomError']) && empty($data['AdresseError']) && empty($data['VilleError']) && empty($data['EmailError'])) {
                if ($this->studentModel->addStudent($data)) {
                    header("Location: " . URLROOT . "/students");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('students/create', $data);
            }
        }

        $this->view('students/create', $data);
    }

    public function update($CNE) {

        $student = $this->studentModel->findStudentById($CNE);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/students");
        } elseif($student->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/students");
        }

        $data = [
            'student' => $student,
            'CNE' =>'',
            'Nom' => '',
            'Prenom' => '',
            'Adresse' => '',
            'Ville' => '',
            'Email' => '',
            'CNEError' => '',
            'NomError' => '',
            'PrenomError' => '',
            'AdresseError' => '',
            'VilleError' => '',
            'EmailError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'CNE' => $CNE,
                'student' => $student,
                'user_id' => $_SESSION['user_id'],
                'CNE' => trim($_POST['CNE']),
                'Nom' => trim($_POST['Nom']),
                'Prenom' => trim($_POST['Prenom']),
                'Adresse' => trim($_POST['Adresse']),
                'Ville' => trim($_POST['Ville']),
                'Email' => trim($_POST['Email']),
                'CNEError' => '',
                'NomError' => '',
                'PrenomError' => '',
                'AdresseError' => '',
                'VilleError' => '',
                'EmailError' => ''
                
            ];

            if(empty($data['CNE'])) {
                $data['CNEError'] = 'The CNE of a student cannot be empty';
            }

            if(empty($data['Nom'])) {
                $data['NomError'] = 'The Nom of a student cannot be empty';
            }

            if(empty($data['Prenom'])) {
                $data['PrenomError'] = 'The Prenom of a student cannot be empty';
            }

            if(empty($data['Adresse'])) {
                $data['AdresseError'] = 'The Adresse of a student cannot be empty';
            }

            if(empty($data['Ville'])) {
                $data['VilleError'] = 'The Ville of a student cannot be empty';
            }

            if(empty($data['Email'])) {
                $data['EmailError'] = 'The Email of a student cannot be empty';
            }


            if (empty($data['CNEError']) && empty($data['NomError']) && empty($data['PrenomError']) && empty($data['AdresseError']) && empty($data['VilleError']) && empty($data['EmailError'])) {
                if ($this->studentModel->updateStudent($data)) {
                    header("Location: " . URLROOT . "/students");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('students/update', $data);
            }
        }

        $this->view('students/update', $data);
    }

    public function delete($CNE) {

        $student = $this->studentModel->findStudentById($CNE);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/students");
        } elseif($student->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/students");
        }

        $data = [
            'student' => $student,
            'CNE' =>'',
            'Nom' => '',
            'Prenom' => '',
            'Adresse' => '',
            'Ville' => '',
            'Email' => '',
            'CNEError' => '',
            'NomError' => '',
            'PrenomError' => '',
            'AdresseError' => '',
            'VilleError' => '',
            'EmailError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->studentModel->deleteStudent($CNE)) {
                    header("Location: " . URLROOT . "/students");
            } else {
               die('Something went wrong!');
            }
        }
    }


};