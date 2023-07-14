<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Twilio\Rest\Client as TwilioClient;
use App\Models\Consultation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Models\Doctor;


class SendAppointmentReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointment:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send appointment reminders to patients and doctors.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get tomorrow's consultations
        $tomorrow = Carbon::tomorrow();
        $consultations = Consultation::with('doctor.user')->whereDate('consultation_date', $tomorrow)->get();

        foreach ($consultations as $consultation) {
            // Send SMS to doctor
            /* $this->sendSms(
                '+212694221637',
                "Reminder: You have a consultation tomorrow at {$consultation->consultation_time}"
            );

            // Send SMS to patient
            $this->sendSms(
                '+212694221637',
                "Reminder: You have a consultation tomorrow at {$consultation->consultation_time}"
            );
            if ($consultation->doctor->user === null) {
                $this->error('Doctor ' . $consultation->doctor->id . ' does not have an associated user.');
                continue;*/

            // Send email to doctor
            $this->sendEmail(
                $consultation->doctor->user->email,
                "Appointment Reminder",
                "You have a consultation tomorrow at {$consultation->consultation_time}"
            );

            // Send email to patient
            $this->sendEmail(
                $consultation->patient->user->email,
                "Appointment Reminder",
                "You have a consultation tomorrow at {$consultation->consultation_time}"
            );
        }
    }

    /**
     * Send an SMS to the given number.
     *
     * @param string $number
     * @param string $message
     */
    /* protected function sendSms(string $number, string $message)
    {
        $twilio = new TwilioClient(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));

        $twilio->messages->create($number, [
            'from' => env('TWILIO_NUMBER'),
            'body' => $message
        ]);
    }*/

    /**
     * Send an email to the given address.
     *
     * @param string $email
     * @param string $subject
     * @param string $body
     */
    protected function sendEmail(string $email, string $subject, string $body)
    {
        Mail::raw($body, function ($message) use ($email, $subject) {
            $message->from('simo.nrt.99@gmail.com
            ', 'El Khayari Mohamed');
            $message->to($email)->subject($subject);
        });
    }
}
