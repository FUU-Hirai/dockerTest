<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class TopController extends AppController
    {
      public function initialize()
      {
        $this->viewBuilder()->setLayout('hirai');
      }
      /**
       * Undocumented function
       *
       * @return void
       */
      public function index()
      {

      }
    }