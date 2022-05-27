<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetCompanyModel;

class CompaniesController extends Controller
{
    public function index()
    {
        unset($_SESSION['dataCompany']);
        unset($_SESSION['companyError']);
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
            session_start();

            $validate = new ValidateData();
            $setCompany = new SetCompanyModel();
            $error = new ErrorMessage();

            $companyName = Request::get()['companyName'];
            $companyVat = $validate->vatIsValid(Request::get()['companyTVA']);
            $companyCountry = $validate->countryIsValid(Request::get()['companyCountry']);
            $companyType = Request::get()['companyType'];

            if (!$companyName){
                $_SESSION['dataCompany']['name'] = $companyName;
                $_SESSION['companyError']['errName'] =
                    $error->companyNameError();
            }
            if (!$companyVat){
                $_SESSION['dataCompany']['vat'] = $companyVat;
                $_SESSION['companyError']['errVat'] = $error->companyVatError();
            }
            if (!$companyCountry){
                $_SESSION['dataCompany']['country'] = $companyCountry;
                $_SESSION['companyError']['errCountry'] =
                    $error->companyCountryError();
            }

            if ($_POST['submit']) {
                if (empty($companyName) OR empty($companyVat) OR empty
                    ($companyCountry)){
                    $this->create();
                }
            }

            if ($companyName) {
                unset($_SESSION['companyError']['ErrName']);
                $setCompany->setName($companyName);
            }

            if ($companyVat) {
                unset($_SESSION['companyError']['ErrVat']);
                $setCompany->setVatNumber($companyVat);
            }

            if ($companyCountry) {
                unset($_SESSION['companyError']['ErrCountry']);
                $setCompany->setCountry($companyCountry);
            }

            if ($companyType) {
                $setCompany->setCompanyType($companyType);
            }

            if ($companyName && $companyVat && $companyCountry) {
                $setCompany->setCompanyDb();
                header('location: /companies');
            }
        }
}