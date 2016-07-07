<!--

Password email template file.

This file will be sent to the user as an email when password reset recovery() route will be called.

This file only utilize $token which will be used to reset password using reset() route.

You can generate link by adding $token in request parameter to your API base url.
For example, http://localhost:8000/api/auth/reset?token=xxxx
->

<?php echo $token; ?>