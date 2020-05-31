<?php

namespace App\Observers;

use App\Appointment;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class AppointmentActionObserver
{
    public function created(Appointment $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Appointment'];
        $users = \App\User::whereHas('roles', function ($q) {
            return $q->where('title', 'Admin');
        })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
