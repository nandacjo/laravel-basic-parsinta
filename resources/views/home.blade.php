<x-app-layout>
    <div class="row">
        <div class="col-md-6">
            {{-- @dd(session()->get('success')) --}}
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert"> {{ session()->get('success') }} </div>
            @endif

            <div class="card">
                {{-- {{ session()->get('success') }} --}}
                <div class="card-header">
                    Welcome to my site
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In explicabo optio id corrupti aliquam
                        minima reprehenderit aperiam quidem reiciendis? Quam beatae saepe aliquid hic iusto animi odit
                        tempore, rerum amet.</p>
                    <p>Iure, at, vel sit consequatur explicabo magni assumenda asperiores voluptas, eaque quam atque
                        molestiae id. Aliquid delectus praesentium porro, fuga nisi temporibus veritatis voluptatibus
                        quasi, incidunt est doloribus, reprehenderit sit.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
