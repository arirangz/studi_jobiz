<?php
namespace App\Repository;

use App\Entity\Job;

class JobRepository extends Repository
{
    public function findAll():array
    {
        $query = $this->pdo->prepare("SELECT id, title, description, salary, country_id, company_id, created_at FROM job");
        $query->execute();

        $jobs = $query->fetchAll($this->pdo::FETCH_ASSOC);

        $jobsArray = [];
        if ($jobs) {
            foreach($jobs as $jobArray) {
                $jobsArray[] = Job::createAndHydrate($jobArray);
            }
        }

        return $jobsArray;
    }

    public function findById(int $id):Job|bool
    {
        $query = $this->pdo->prepare("SELECT id, title, description, salary, country_id, company_id, created_at FROM job WHERE id = :id");
        $query->bindValue(':id', $id, $this->pdo::PARAM_INT);
        $query->execute();
        $jobArray = $query->fetch($this->pdo::FETCH_ASSOC);
        if ($jobArray) {
            return Job::createAndHydrate($jobArray);
        } else {
            return false;
        }
        

    }

}