<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    /*
    |---------------------------------------------
    | ADD NEW TEMPLATE
    |---------------------------------------------
    */
    public function createDefaultTemplate(){
        $total_temp = 13;
        for($i = 0; $i < $total_temp; $i++){
            $new_template                   = new Template();
            $new_template->template_type    = "stub-".$i;
            $new_template->template_serial  = "07646";
            $new_template->template_style   = "stub-light";
            $new_template->company_name     = "Type company name";
            $new_template->company_address  = "Type company address";
            $new_template->employee_name    = "Type employee name";
            $new_template->employee_address = "Type employee address";
            $new_template->ssn_number       = "XXX-XXX-1234";
            $new_template->report_start_date = "11/02/2018";
            $new_template->report_end_date  = "11/02/2018";
            $new_template->pay_date         = "11/02/2018";
            $new_template->employee_id      = "124";
            $new_template->income           = "4500";
            $new_template->rate             = "12";
            $new_template->hours            = "40";
            $new_template->current_pay      = "5500";
            $new_template->medical_tax      = "10.20";
            $new_template->social_tax       = "9.50";
            $new_template->federal_tax      = "8.50";
            $new_template->save();
        }

        // return
        return $data = [
            'status'    => 'success',
            'message'   => 'template generate successfully!',
        ];
    }

    /*
    |---------------------------------------------
    | GET TEMPLATE BY ID
    |---------------------------------------------
    */
    public function getTemplate($id){
        return Template::where("id", $id)->first();
    }

    /*
    |---------------------------------------------
    | GET ALL TEMPLATE
    |---------------------------------------------
    */
    public function getAllTemplate(){
        return Template::orderBy("id", "DESC")->get();
    }


    /*
    |---------------------------------------------
    | DELETE TEMPLATE BY ID
    |---------------------------------------------
    */
    public function deleteTemplate($id){
        $del_template = Template::find($id)->delete();
        return $del_template;
    }


    /*
    |---------------------------------------------
    | DELETE ALL TEMPLATE
    |---------------------------------------------
    */
    public function deleteAllTemplate(){
        return Template::truncate();
    }

}
