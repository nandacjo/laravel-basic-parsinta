<x-app-layout title="Contact">

    <x-slot name="style">
        <style>
            body {
                background-color: aqua;
            }

            button {
                width: 80px;
                padding: 10px;
                border-radius: 8px;
                background-color: #fff;
                border: none;
                transition: all ease 0.2s;
            }

            button:hover {
                background-color: #eee;
                cursor: pointer;
                border: 2px solid #ddd;
            }

            h1 {}
        </style>
    </x-slot>

    <h1>Contact</h1>

    <form action="/contact" method="post">

        @csrf
        <button type="submit">Submit</button>

    </form>

</x-app-layout>
