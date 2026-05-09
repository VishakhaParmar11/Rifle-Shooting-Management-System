<?php 
    session_start();
    include("../code_parts/logo.php");
$send_otp=$_SESSION['otp'];

if ($send_otp=="") {

    // code...
    echo "<script>window.location.href='index.php';</script>";
}
//echo "<script>alert('$otp');</script>";




                     if (isset($_POST['go'])) {
                        // code...
                        extract($_POST);
                        $otp=$otp[0].$otp[1].$otp[2].$otp[3];

                        if ($otp==$send_otp) {
                            // code...
                            echo "<script>window.location.href='new_password.php';</script>";
                        //echo "<script>alert('is metch');</script>";
                        }else{
                        echo "<script>alert('Not match Otp');</script>";
                       

                        }

                    } 
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
   <style type="text/css">
       .bg-slate-50 
       {
        --tw-bg-opacity: 1;
        background-color: #06A3DA;
        }
   </style>
  <meta charset="UTF-8">
  <title>AKS Academy</title>
  <script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    inter: ['Inter', 'sans-serif'],
                },
            },
        },
    };
</script><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700'>
<link rel="shortcut icon" type="image/x-icon" href="abc.jpg">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="relative font-inter antialiased" style="background-color:#06A3DA;">

    <main class="relative min-h-screen flex flex-col justify-center  overflow-hidden" style="background-color:#06A3DA;">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
            <div class="flex justify-center">

                <div class="max-w-md mx-auto text-center bg-white px-4 sm:px-8 py-10 rounded-xl shadow">
                    <header class="mb-8">
                        <h1 class="text-2xl font-bold mb-1">Mobile Phone Verification</h1>
                        <p class="text-[15px] text-slate-500">Enter the 4-digit verification code that was sent to your phone number.</p>
                    </header>
                    <form id="otp-form" method="post">
                        <div class="flex items-center justify-center gap-3">
                            <input
                            name="otp[]"
                                type="text"
                                class="w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                                pattern="\d*" maxlength="1" />
                            <input
                                name="otp[]"
                                type="text"
                                class="w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                                maxlength="1" />
                            <input
                                name="otp[]"

                                type="text"
                                class="w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                                maxlength="1" />
                            <input

                                name="otp[]"
                                type="text"
                                class="w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100"
                                maxlength="1" />
                        </div>
                        <div class="max-w-[260px] mx-auto mt-4">
                            <button type="submit"
                                class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150" name="go" style="background-color: #06A3DA;">Verify
                                Account</button>
                        </div>
                    </form>
                    <div class="text-sm text-slate-500 mt-4">Didn't receive code? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">Resend</a></div>
                </div>

            </div>
        </div>
    </main>

    <!-- Page footer -->
    <footer class="absolute left-6 right-6 md:left-12 md:right-auto bottom-4 md:bottom-8 text-center md:text-left">
        <a class="text-xs text-slate-500 hover:underline" href="https://cruip.com">&copy;Cruip - Tailwind CSS
            templates</a>
    </footer>

    <!-- Banner with links -->
    <div class="fixed bottom-0 right-0 w-full md:bottom-6 md:right-12 md:w-auto z-50"
        :class="bannerOpen ? '' : 'hidden'" x-data="{ bannerOpen: true }">
        <div class="bg-slate-800 text-sm p-3 md:rounded shadow flex justify-between">
            <div class="text-slate-500 inline-flex">
                <a class="font-medium hover:underline text-slate-300"
                    href="https://cruip.com/otp-form-example-made-with-tailwind-css-and-javascript/" target="_blank">
                    Read Tutorial
                </a>
                <span class="italic px-1.5">or</span>
                <a class="font-medium hover:underline text-indigo-500 flex items-center"
                    href="https://github.com/cruip/cruip-tutorials/blob/main/otp-form/index.html" target="_blank"
                    rel="noreferrer">
                    <span>Download</span>
                    <svg class="fill-indigo-400 ml-1" xmlns="http://www.w3.org/2000/svg" width="9" height="9">
                        <path d="m1.649 8.514-.91-.915 5.514-5.523H2.027l.01-1.258h6.388v6.394H7.158l.01-4.226z" />
                    </svg>
                </a>
            </div>
            <button class="text-slate-500 hover:text-slate-400 pl-2 ml-3 border-l border-slate-700"
                @click="bannerOpen = false">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16">
                    <path
                        d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
                </svg>
            </button>
        </div>
    </div>

</div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js'></script><script  src="./script.js"></script>

</body>
</html>
