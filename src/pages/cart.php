<div class="container mx-auto mt-10">
  <div class="sm:flex shadow-md my-10">
    <div class="w-full sm:w-3/4 bg-white px-10 py-10">
      <div class="flex justify-between border-b pb-8">
        <h3>Votre pannier</h3>
        <span>1 article</span>
      </div>
      <div class="md:flex items-stretch py-8 md:py-10 lg:py-8 border-t border-gray-50">
        <div class="md:w-1/4 2xl:w-1/4 w-full">
          <img src="./images/produits/blanc.png" alt="Thé" class="h-full object-center object-cover md:block hidden" />
        </div>
        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
          <div class="flex flex-col items-start w-full">
            <h3>Mimas</h3>
            <select id="grammes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-2">
              <option selected disabled hidden>Sélectionnez un grammage</option>
              <option value="100">100 g</option>
              <option value="200">200 g</option>
              <option value="300">300 g</option>
            </select>
            <div class="flex flex-col items-start w-full">
              <label for="counter-input" class="flex-shrink-0 mb-2"><span>Choisissez la quanti'thé :</span></label>
              <div class="relative flex items-center">
                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                  <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                  </svg>
                </button>
                <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="0" required />
                <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                  <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between pt-5">
            <div class="flex items-center">
              <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Supprimer</p>
            </div>
            <p class="text-base font-black leading-none text-gray-800">12€</p>
          </div>
        </div>
      </div>
      <a href="../index.php#main" class="flex font-semibold text-pink-600 text-sm mt-10">
        <svg class="fill-current mr-2 text-pink-600 w-4" viewBox="0 0 448 512">
          <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/>
        </svg>
        Continuez vos achats
      </a>
    </div>
    <div id="summary" class="w-full sm:w-1/4 md:w-1/2 px-8 py-10 bg-white">
      <h3>Résummé de votre commande</h3>
      <div>
        <label class="font-medium inline-block mb-3 text-sm">
          <span>Livraison</span>
        </label>
        <select class="block p-2 text-gray-600 w-full text-sm">
          <option>Livraison à domicile en france métropolitaine</option>
          <option>Livraison à domicile Départements d'outre mer</option>
          <option>Sélectionnez un point relai</option>
        </select>
      </div>
      <div class="border-t mt-8">
        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
          <span>Total</span>
          <span>x €</span>
        </div>
        <button type="submit" class="flex-none rounded-md bg-purple-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-700 mt-4">Passer au paiement</button>
      </div>
    </div>
  </div>
</div>