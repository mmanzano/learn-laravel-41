<?php namespace HireMe\Repositories;

use HireMe\Entities\Candidate;

class CandidateRepo {

    public function find($id)
    {
        return Candidate::find($id);
    }
}