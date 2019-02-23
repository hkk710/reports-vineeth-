<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  protected $fillable = [
      'doctor_name', 'mci_reg_no', 'address', 'mobile_no', 'hospital_no', 'facilities',
  ];
}
