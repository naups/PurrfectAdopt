<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Purrfect Adopt</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF7D4;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header');

<!-- sidebar -->
<div class="mt-16 mx-5 grid grid-cols-6 gap-4">
    <div class="col-start-1 col-end-7 flex-col items-center">
        <img class="w-full object-cover object-top" src="{{ asset('/img/artikel1.jpg') }}" style="max-height:600px;">
    </div>
    <div class="w-full flex flex-col my-4 p-6 text-center items-center">
        <h3 class="text-xl font-semibold">Share</h3> <br>
        <!-- Twitter -->
    <a href="#" class="hover:text-yellow-500">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path
        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
    </a>
        <br>
        <!-- Facebook -->
    <a href="#" class="hover:text-yellow-500">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
    </a>
        <br>
        <!-- Google -->
    <a href="#" class="hover:text-yellow-500"><svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
        fill-rule="evenodd"
        clip-rule="evenodd" />
        </svg>
    </a>
        <br>
        <!-- Pinterest -->
    <a href="#" class="hover:text-yellow-500"><svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd"clip-rule="evenodd" />
        </svg>
        <br>
        <!-- Instagram -->
    <a href="#" class="hover:text-yellow-500"> <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
    </a>
    </div>
<!-- sidebar end -->
<!-- content -->
<div class="col-span-5 flex flex-col justify-start p-6 my-4">
        <a href="#" class="text-black-700 text-sm font-bold uppercase pb-4 text-center">Symptoms of Cat Illness</a>
        <a href="#" class="text-3xl font-bold pb-4 text-center">Treating Cat Fever</a>
        <a href="#" class="pb-6">Just like humans, cats can also experience fever. However, cat fever has distinct characteristics. For those who have recently acquired a cat, it is important to pay attention to various aspects of cat fever so that you know how to treat a cat with fever in the future.</a>
        <a href="#" class="text-black-700 text-sm font-bold uppercase pb-4">Causes of Cat Fever</a>
        <a href="#" class="pb-6">The most common cause of cat fever is usually due to infections that enter through the mouth, nose, eyes, or throat. Cat fever typically occurs as a body's response to fight off the infection attacking the body.</a>
        <a href=""></a>
        <a href="#" class="pb-6">Apart from these seasonal factors, cat fever can also be an indication of a serious underlying illness. Therefore, it is important to pay attention to its condition and promptly seek medical attention to receive appropriate treatment.</a>
        <a href="#" class="text-black-700 text-sm font-bold uppercase pb-4">Signs of Cat Fever</a>
        <a href="#" class="pb-6">Signs that may indicate cat fever include a loss of appetite and decreased water intake that lasts for more than 24 hours. When a cat loses its appetite, its body becomes weaker and lacks energy.</a>
        <a href=""></a>
        <a href="#" class="pb-6">To truly confirm that a cat has a fever, you can perform a rectal temperature check using a thermometer. If the body temperature reads 39.3 degrees Celsius or higher, it is advisable to consult a veterinarian immediately.</a>
        <a href="#" class="text-black-700 text-sm font-bold uppercase pb-4">Treating Cat Fever</a>
        <a href="#" class="pb-6">When you observe the signs of cat fever, the next step is to seek veterinary care. The veterinarian will conduct an examination and provide appropriate treatment for your cat based on its specific needs and health condition. Typically, when a cat has a fever, the veterinarian will administer medication to reduce the fever, often in the form of liquid medication.</a>
        <a href="#" class="text-black-700 text-sm font-bold uppercase pb-4">First Aid for Cat Fever</a>
        <a href="#" class="pb-6">If you find yourself in a situation where you cannot immediately see a veterinarian, you can administer some first aid measures to help treat your cat's fever. Here are some steps you can take:</a>
        <a href="#" class="pb-6">
            <li>Place the cat in a cool, dark area with a cool floor. Cats lower their body temperature through their oil glands and sweat. By providing contact with a cool floor, their body temperature will gradually decrease.</li>
            <li>Use a fan to help lower the room temperature and gradually reduce their body temperature.</li>
            <li>Once possible, take your cat to the veterinarian for a thorough examination, especially to rule out any serious underlying conditions that require prompt medical attention.</li>
        </a>
        <a href=""></a>
        <a href="#" class="pb-6">Well, that's a brief explanation about cat fever and how to treat it. Make sure to always pay attention to the health condition of your beloved cat and provide them with nutritious food. For cats with sensitive digestion, you can give them</a>
    </div>
  </div>
  <!-- content -->
  <br>
@include('components.footer');

</body>
</html>
