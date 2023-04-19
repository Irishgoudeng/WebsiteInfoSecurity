<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body >
    <nav class="py-4 mx-4">
        <div class="container flex items-center justify-between">
            <div class="flex items-center">
                <div class="p-2">
                    <a href="#">
                        <img src="../img/logo.png" alt="Logo" class="h-12">
                    </a>
                </div>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#Home" class="px-4 py-2 font-poppins text-gray-700 hover:text-black text-lg">Home</a>
                <a href="#Features" class="px-4 py-2 font-poppins text-gray-700 hover:text-black text-lg">Features</a>
                <a href="#Appointment" class="px-4 py-2 font-poppins text-gray-700 hover:text-black text-lg">Appointment</a>
            </div>
            <div class="flex items-center">
                <!-- <a href="login.php" class="px-4 py-2 text-gray-700 hover:text-gray-900 text-lg">Log In</a> -->
                <a href="logout.php"
                    class="px-4 py-2 bg-black hover:bg-slate-600 text-white rounded-2xl ml-2 text-lg">Log Out</a>
            </div>
    </nav>
    <hr class="border-b border-blue-600 w-full mt-2">
    <div class="container mx-auto py-8 px-4 md:flex md:items-center">
        <div class="md:w-1/2">
            <h2 class="text-6xl font-poppins mt-10 mb-20 ml-14">Find your Doctor and <br> make an appointment</h2>
            <p class="text-gray-400 text-2xl mb-10 ml-14">Find your Doctor and make an <br> appointment</p>
            <p class="text-gray-400 text-2xl mb-10 ml-14">Find your Doctor and make an <br> appointment</p>
            <p class="text-gray-400 text-2xl mb-10 ml-14">Find your Doctor and make an <br> appointment</p>
        </div>
        <div class="md:w-1/2 md:pl-8">
            <img src="https://www.southtampaimmediatecare.com/wp-content/uploads/2017/02/doctor-appointment.jpg"
                alt="Image" class="object-cover w-full h-full rounded-lg">
        </div>
    </div>
    <hr class="border-b border-black w-full mt-2">
    <!--second screen ni-->
    <div class="max-w-screen-xl mx-auto py-8 gap-4">
      <div class="max-w-xl mx-auto bg-white rounded-lg overflow-hidden">
        <h2 class="text-4xl poppins mt-10 mb-12 flex justify-center">Sponsors</h2>
        <div class="flex justify-center items-center h-60">
          <div class="w-full pl-16">
            <!-- icons ni-->
            <img class="object-contain h-full w-full rounded-s" src="../img/DavaoDOC.png" alt="Image 1" />
          </div>
          <div class="w-1/2 pl-4">
            <img class="object-contain h-full w-full rounded-s" src="../img/TEBOW.png" alt="Image 2" />
          </div>
          <div class="max-w-xl pl-16">
            <img class="object-contain h-full w-full rounded-s" src="../img/SPMC.png" alt="Image 3" />
          </div>
          <div class="w-full pl-16">
            <img class="object-contain h-full rounded-s" src="../img/AdventistHos.png" alt="Image 4" />
          </div>
        </div>
        <div class="flex justify-center">
          <img class="max-w-lg mt-4" src="../img/line.png" alt="Mental Health" />
        </div>
        <!-- end sa mga icons -->
        <h2 class="text-4xl poppins mt-10 mb-12 flex justify-center">Features</h2>
      </div>
    </div>
    <div class="flex items-center justify-center">
      <div class="flex items-center mr-8">
        <img src="../img/prescription.png" alt="Icon 1" class="h-8 w-8 mr-2">
        <span>e-Prescription</span>
      </div>
      <div class="flex items-center mr-8">
        <img src="../img/medical-certificate.png" alt="Icon 2" class="h-8 w-8 mr-2">
        <span>e-Medical Health Certificate</span>
      </div>
      <div class="flex items-center mr-8">
        <img src="../img/consent.png" alt="Icon 3" class="h-8 w-8 mr-2">
        <span>General Health Information</span>
      </div>
      <div class="flex items-center">
        <img src="../img/medicine.png" alt="Icon 4" class="h-8 w-8 mr-2">
        <span>Proper Medication</span>
      </div>
    </div>
    <div class="flex items-center justify-center mt-8">
      <img src="../img/neurology.png" alt="Icon 4" class="h-8 w-8">
      <span>Mental Health</span>
    </div>
    <div class="flex justify-center ">
      <img class="max-w-lg mt-4" src="../img/line.png" alt="Additional Image" />
    </div>
    <hr class="border-b border-blue-600 w-full mt-2">
    <div id="Appointment">
      <h2 class="text-4xl poppins mt-10 mb-12 flex justify-center">Create an Appointment</h2>
    </div>
    <div class="container mx-auto py-8 px-4 md:flex md:items-center">
      <div class="md:w-1/2">
        <img src="https://static.toiimg.com/photo/71167261.cms"
        alt="Image" class="object-cover w-full h-full rounded-lg">
      </div>
      <!-- APPOINTMENT  FORM -->
      <div class="md:w-1/2 md:pl-8" >
        <form class="max-w-lg mx-auto mt-8" action="submit.php" method="post">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
              Name and Surename:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Enter your name">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
              Email:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter your email">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
              Phone Number:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" type="tel" placeholder="Enter your phone number">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
              Date:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" name="date" type="date">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
              Time:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="time" name="time" type="time">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="message">
              Message:
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <div class="flex items-center justify-center">
            <button class="px-4 py-2 bg-black hover:bg-slate-600 text-white rounded-2xl ml-2 text-l w-1/2" type="submit">
              Submit
            </button>
          </div>
        </form>  
    </div>
  </section>
</div>
<div class="flex justify-center">
  <img class="max-w-lg mt-4" src="../img/line.png" alt="Mental Health" />
</div>
<hr class="border-b border-blue-600 w-full mt-2">
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <div class="flex items-center justify-center mt-3">
            <button class="px-4 py-2 bg-black hover:bg-slate-600 text-white rounded-2xl ml-2 text-l w-full" type="Send">
              Send
            </button>
          </div>
      </form>
  </div>
</section>
</body>
</html>