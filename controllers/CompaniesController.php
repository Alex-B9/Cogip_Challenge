<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetCompanyModel;
use App\models\SetUserModel;

class CompaniesController extends Controller
{
    public function index()
    {
        require $this->view('companies');
    }

    public function create()
    {
        require $this->view('company_new');
    }

    public function show()
    {
        require $this->view('company_details');
    }

    public function store()
    {
        if (isset($_POST))
        {
            $dataValidate = new ValidateData();
            $user = new UserController();
            $setCompany = new SetCompanyModel();
            $error = new ErrorMessage();

            $companyName = $dataValidate->nameIsValid(Request::get()['companyName']);
            $companyCountry = $dataValidate->nameIsValid(Request::get()['']);
            $companyVAT = $dataValidate->vatIsValid(Request::get()['companyTVA']);

            if ($companyName)
            {
                $setCompany->setName($companyName);
            }
            else
            {
                echo $error->errorCompanyName();
            }

            if ($companyCountry)
            {
                $setCompany->setCountry($companyCountry);
            }
            else
            {
                echo $error->errorCompanyCountry();
            }

            if ($companyVAT)
            {
                $setCompany->setVatNumber($companyVAT);
            }
            else
            {
                echo $error->errorCompanyVat();
            }

            if ($companyName && $companyCountry && $companyVAT)
                {
                    $setCompany->dbSetCompany();
                }
            else
            {
                echo $error->companyExist();
            }
        }
    }
}