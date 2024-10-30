<?php
class DashboardController
{

    public function dashboard()
    {
        // if (isset($_GET['user'])) {
        //     //Hacer un codigo que con el usuario que llega desde el front, valide si es valido y que rol tiene, se sugiere usar la BD
        //     session_start();
        //     $_SESSION['user'] = 'Lizeth';
        //     $_SESSION['rol'] = 'Normal';
        // }
        require_once('views/components/layout/head.php');
        require_once('views/dashboard/dashboard.php');
        require_once('views/components/layout/footer.php');
    }
}
