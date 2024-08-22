<div>
    <h1>Excel</h1>

    <form action="{{route('import')}}" method="POST" class="w-[400px] bg-blue-400 p-8 rounded-lg" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="file">
            <button>
                enviar
            </button>
        </div>
    </form>
</div>
