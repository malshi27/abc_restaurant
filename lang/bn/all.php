<?php

return [
    'label'   => [
        'name'             => 'নাম',
        'email'            => 'ইমেইল',
        'phone'            => 'ফোন',
        'item_category_id' => 'বিভাগ',
        'tax_id'           => 'ট্যাক্স',
        'code'             => 'কোড',
        'discount'         => 'ডিসকাউন্ট',
        'discount_type'    => 'ছাড়ের ধরন',
        'start_date'       => 'শুরু করার তারিখ',
        'end_date'         => 'শেষ তারিখ',
        'amount'           => 'পরিমাণ',
        'status'           => 'স্থিতি',
        'price'            => 'দাম',
        'item_type'        => 'আইটেমের প্রকার',
        'is_featured'      => 'বৈশিষ্ট্যযুক্ত',
        'role'             => 'ভূমিকা',
        'order_serial_no'  => 'অর্ডার সিরিয়াল নম্বর',
        'date'             => 'তারিখ',
        'total'            => 'মোট',
        'delivery_charge'  => 'ডেলিভারি চার্জ',
        'payment_type'     => 'পেমেন্টের ধরন',
        'payment_status'   => 'পেমেন্ট স্ট্যাটাস',
        'quantity'         => 'পরিমাণ',
        'order_type'       => 'অর্ডারের ধরন',
        'customer'         => 'গ্রাহক',
        'confirm'          => 'নিশ্চিত করুন',
        'congratulations'  => 'অভিনন্দন!',
        'transaction_id'   => 'লেনদেন আইডি',
        'back_to_home'     => 'বাড়িতে ফিরুন',
        'payment_method'   => 'পেমেন্ট পদ্ধতি',
        'now'              => 'এখন',
        'balance'          => 'ব্যালেন্স',
        'advance'          => 'অগ্রিম',
        'all_roles'        => 'সব ভূমিকা',
        'all_users'        => 'সমস্ত ব্যবহারকারী',
        'user'             => 'ব্যবহারকারী',
        'title'            => 'শিরোনাম',
        'all_items'        => 'সমস্ত আইটেম',
        'size'             => 'আকার',
    ],
    'message' => [
        'validation_error'            => 'বৈধকরণ ত্রুটি।',
        'credentials_error'           => 'প্রমাণপত্রে ত্রুটি।',
        'credentials_invalid'         => 'অবৈধ শংসাপত্র বা আপনি অবরুদ্ধ',
        'role_error'                  => 'ভুমিকা ত্রুটি।',
        'role_exist'                  => 'ভুমিকা বিদ্যমান নেই।',
        'login_success'               => 'সফলভাবে লগইন করুন।',
        'logout_success'              => 'সফলভাবে লগ আউট হয়েছে।',
        'account_delete_success'      => 'অ্যাকাউন্ট সফলভাবে মুছে ফেলা হয়েছে।',
        'account_not_delete'          => 'আপনার একটি সক্রিয় অর্ডার থাকলে আপনি আপনার অ্যাকাউন্ট মুছতে পারবেন না।',
        'invalid_api_key'             => 'অবৈধ এপিআই কী।',
        'user_match'                  => 'ব্যবহারকারী মেলে না।',
        'something_wrong'             => 'কিছু ভুল।',
        'permission_denied'           => 'অনুমতি অস্বীকার করা হয়েছে।',
        'item_match'                  => 'আইটেম মেলে না।',
        'offer_item_exist'            => 'আইটেমটি ইতিমধ্যেই অন্য একটি অফারে যোগ করা হয়েছে। অফার শেষ হলে আপনি এই আইটেমটি আবার যোগ করতে পারেন।',
        'minimum_order_amount'        => 'ন্যূনতম অর্ডারের পরিমাণ হল',
        'coupon_date_expired'         => 'কুপনের সময় শেষ হয়ে গেছে',
        'coupon_not_exist'            => 'কুপনটি বিদ্যমান নেই',
        'code_is_invalid'             => 'কোডটি অবৈধ।',
        'code_is_expired'             => 'কোডটির মেয়াদ শেষ।',
        'you_can_reset_your_password' => 'এখন আপনি আপনার পাসওয়ার্ড পুনরায় সেট করতে পারেন।',
        'check_your_email_for_code'   => 'কোডের জন্য আপনার ইমেল চেক করুন।',
        'check_your_phone_for_code'   => 'কোডের জন্য আপনার ফোন চেক করুন।',
        'token_created_fail'          => 'টোকেন তৈরি করা ব্যর্থ হয়েছে।',
        'email_does_not_exist'        => 'এই ইমেলটির অস্তিত্ব নেই।',
        'phone_exist'                 => 'এই ফোনটি আগে থেকেই আছে।',
        'otp_verify_success'          => 'OTP যাচাই সফলভাবে হয়েছে।',
        'register_successfully'       => 'সফলভাবে নিবন্ধন করুন।',
        'select_your_payment_method'  => 'আপনার অর্থপ্রদানের পদ্ধতি নির্বাচন করুন',
        'payment_successful'          => 'আপনার পেমেন্ট সফলভাবে প্রক্রিয়া করা হয়েছে',
        'payment_canceled'            => 'পেমেন্ট বাতিল করা হয়েছে',
        'payment_gateway_disable'     => 'পেমেন্ট গেটওয়ে নিষ্ক্রিয়',
        'token_save'                  => 'টোকেনটি সফলভাবে সংরক্ষিত হয়েছে।',
        'token_is_invalid'            => 'টোকেনটি অবৈধ।',
        'order_accept'                => 'অর্ডারটি ইতিমধ্যে গৃহীত।',
        'feature_disable'             => 'এই বৈশিষ্ট্যটি ডেমোর জন্য অক্ষম করা হয়েছে।',
        'time_slot_exist'             => 'টাইম স্লট ইতিমধ্যেই বিদ্যমান।',
        'resource_already_used'       => 'স্থায়ীভাবে এই সম্পদ সরানো যাবে না. এটি অন্য সম্পদের সাথে সম্পর্কিত।',
        "only_customer_delete"        => 'শুধুমাত্র গ্রাহকদের অ্যাকাউন্ট মুছে ফেলা যাবে',
    ]
];