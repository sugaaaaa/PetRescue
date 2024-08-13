<x-app-layout>
    <section class="max-w-screen-xl mx-auto bg-[#F9F6E5] p-10 rounded-lg">
        <h1 class="text-2xl text-center font-bold mb-5">Pet Adoption Questionnaire</h1>
        <br>
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
        <br>
        @if(isset($pet))
            <h1>Pet Name: {{ $pet->name }}</h1>
            <br>
            <form id="adoptionForm" action="{{ route('adoption.store') }}" method="POST">
                @csrf
                <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                <!-- Form fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name">Full Name*</label>
                        <input type="text" name="name" class="w-full py-2 px-4 mt-2" required>
                    </div>
                    <div>
                        <label for="position">Position (Optional)</label>
                        <input type="text" name="position" id="position" class="w-full py-2 px-4 mt-2">
                    </div>
                    <div>
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" class="w-full py-2 px-4 mt-2" required>
                    </div>
                    <div>
                        <label for="phone">Phone*</label>
                        <input type="text" name="phone" id="phone" class="w-full py-2 px-4 mt-2" required>
                    </div>
                </div>
                <div class="mt-5">
                    <label for="address">Address*</label>
                    <input type="text" name="address" id="address" placeholder="Phnom Penh, ..." class="w-full py-2 px-4 mt-2" required>
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach(range(1, 12) as $i)
                        <div class="mt-5">
                            <label for="q{{ $i }}">{{ $i }}. {{ ['Why would you want to adopt an animal from us?', 'Please provide details about the size of your home.', 'What animal do you want to raise? (Breed, size, age, sex, personality) If you are interested in any animal, please fill in the name.', 'How many people live in the house (old people, children)? A. Are they allergic? B. Do they agree to volunteer to adopt animals?', 'Can animals walk out onto the street / balcony / garden without control?', 'How do you know about our program?', 'How many hours a day can an animal be alone?', 'Do you travel often? What were your plans for the animals when you set out?', 'Do you have pets living with you? (Breed, age, and sex) Name the medication / behavioral problem your pet is having.', 'Have you ever raised / volunteered an animal before? If ever, what breed? Number? Where are they?', 'How many hours a day can an animal be alone?', 'What is your animal\'s nutrition, exercise, and energy-boosting habits?'][$i - 1] }}</label>
                            <input type="text" name="q{{ $i }}" class="w-full py-2 px-4 mt-2">
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center mt-5">
                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I would like to confirm that the information is unique, I agree to let ARC restrain my confidential information (privacy).</label>
                </div>

                <div>
                    <button id="submitButton" type="submit" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Submit
                    </button>
                </div>
                <!-- Main modal -->
                <div id="printModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="printModal">
                                <span class="sr-only">Close modal</span>
                            </button>
                            <h1 class="text-2xl text-center font-bold mb-5 mt-5">Adoption Application Submitted</h1>
                            <p class="text-center">Thank you for your application. You can view and download the PDF below.</p>
                            <div class="flex justify-center items-center mt-5 space-x-4">
                                <a href="{{ route('adoption.viewPdf') }}" target="_blank">
                                    <button data-modal-toggle="printModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                        View PDF
                                    </button>
                                </a>
                                <a href="{{ route('adoption.downloadPdf') }}" id="downloadPdfLink">
                                    <button type="button" class="py-2 px-3 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                                        Download PDF
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <p>No pet selected for adoption.</p>
        @endif
    </section>

    <script>
        document.getElementById('adoptionForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('printModal').classList.remove('hidden');
                } else {
                    alert('Something went wrong. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong');
            });
        });

        document.getElementById('downloadPdfLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default anchor behavior

            // Trigger the download
            window.location.href = this.href;

            // Redirect to the home page after a delay
            setTimeout(() => {
                window.location.href = '/';
            }, 500); // Adjust the timeout duration as needed
        });
    </script>
</x-app-layout>
