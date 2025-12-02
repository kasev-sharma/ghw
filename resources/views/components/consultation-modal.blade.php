<div x-show="consultationModalOpen" 
     style="display: none;"
     class="fixed inset-0 z-[60] overflow-y-auto" 
     aria-labelledby="modal-title" role="dialog" aria-modal="true">
    
    <!-- Dark Backdrop -->
    <div x-show="consultationModalOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity" 
         @click="consultationModalOpen = false"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        
        <!-- Modal Panel -->
        <div x-show="consultationModalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg border-t-4 border-secondary">
            
            <!-- Close Button -->
            <button @click="consultationModalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                        <h3 class="text-2xl font-heading font-bold leading-6 text-primary" id="modal-title">Request a Call Back</h3>
                        <p class="text-sm text-neutral-grey mt-2">Fill in your details and our team will contact you shortly.</p>
                        
                        <!-- Form -->
                        <form action="#" method="POST" class="mt-6 space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-neutral-dark">Patient Name *</label>
                                <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary sm:text-sm">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-neutral-dark">Email *</label>
                                <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary sm:text-sm">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="country" class="block text-sm font-medium text-neutral-dark">Country</label>
                                    <select id="country" name="country" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary sm:text-sm">
                                        <option>Select...</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>Bangladesh</option>
                                        <option>Nigeria</option>
                                        <option>Kenya</option>
                                        <!-- Add more later -->
                                    </select>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-neutral-dark">Phone Number *</label>
                                    <input type="tel" name="phone" id="phone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-neutral-dark">Message (Optional)</label>
                                <textarea name="message" id="message" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-secondary focus:ring-secondary sm:text-sm" x-model="contactScrollSubject"></textarea>
                            </div>

                            <button type="submit" class="w-full inline-flex justify-center rounded-md bg-primary px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-secondary transition-colors duration-200">
                                Submit Now
                            </button>
                        </form>
                        <p class="mt-4 text-xs text-center text-gray-400">Your personal data will be kept confidential.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>