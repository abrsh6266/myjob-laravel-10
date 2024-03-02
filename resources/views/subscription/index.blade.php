<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="card-body">
                            <h5 class="card-title">Weekly - $20</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body text-center">
                            <x-nav-link :href="route('pay.weekly')" class="card-link">
                                <button class="btn btn-success">Pay</button>
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="card-body">
                            <h5 class="card-title">Monthly - $80</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body text-center">
                            <x-nav-link :href="route('pay.monthly')" class="card-link">
                                <button class="btn btn-success">Pay</button>
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="card-body">
                            <h5 class="card-title">Yearly - $200</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body text-center">
                            <x-nav-link :href="route('pay.yearly')" class="card-link">
                                <button class="btn btn-success">Pay</button>
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
