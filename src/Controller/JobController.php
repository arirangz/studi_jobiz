<?php

namespace App\Controller;

use App\Repository\JobRepository;
use Exception;

class JobController extends Controller
{
    public function list(): void
    {
        $jobRepository = new JobRepository();

        $jobs = $jobRepository->findAll();

        $this->render("job/list", [
            "jobs" => $jobs
        ]);
    }

    public function show(): void
    {
        try {
            if (isset($_GET["id"])) {
                $id = (int)$_GET["id"];
                $jobRepository = new JobRepository();
                $job = $jobRepository->findById($id);
                if ($job) {
                    $this->render("job/show", [
                        "job" => $job
                    ]);
                } else {
                    throw new Exception("L'offre n'existe pas");
                }

            } else {
                throw new Exception("L'id est manquant en paramètre d'url");
            }
        } catch (Exception $e) {
            $this->render("errors/default", [
                "errorMessage" => $e->getMessage()
            ]);
        }
    }
}
