<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;

// use Twilio\Rest\Client;

// class VerificationController extends Controller
// {

// // ...

// public function sendVerificationCode(Request $request)
// {
//     $verificationCode = rand(1000, 9999); // Generate a random 4-digit code
//     $phoneNumber = $request->input('phone_number');

//     $twilio = new Client(config('services.twilio.sid'), config('services.twilio.token'));

//     $twilio->messages->create(
//         $phoneNumber,
//         [
//             'from' => config('services.twilio.phone_number'),
//             'body' => "Your verification code is: $verificationCode",
//         ]
//         );
//     // Store the verification code in the database or cache for validation later
//     $user=User::create(
//         ['verification_code' => '$verificationCode',
//         'email' => $request->email,
//         'name' => $request->name,
//         'phone_number' => $request->phone_number,
//         'password' => $request->password ] ,
//         ) ;
//     return response()->json(['message' => 'Verification code sent successfully']);
// }
// // public function verifyCode(Request $request)
// // {
// //     $inputCode = $request->input('verification_code');

// //     // Retrieve the stored code from the database or cache
// //     $storedCode; = // Retrieve code logic here

// //     if ($inputCode === $storedCode) {
// //         // Code is valid, perform further actions (e.g., mark user as verified)
// //         return response()->json(['message' => 'Verification successful']);
// //     } else {
// //         return response()->json(['message' => 'Invalid verification code'], 400);
// //     }
// // }


// }
