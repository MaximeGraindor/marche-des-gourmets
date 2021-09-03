<style>
    .cards-link{
    padding: 0.5rem 0.8rem;
    border-radius: 5px;
    background-color: #562121;
    color: white;
    text-decoration: none;
    }
    .cards-link:hover{
        background-color: #a74242
    }
</style>

<div>
    <h2 class="mb-3">
        Les derniers messages reçu
    </h2>
    <table class="table w-full table-default">
        <thead>
            <th>email</th>
            <th>Sujet</th>
            <th>message</th>
            <th>Date</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{$message->email}}</td>
                <td>{{\Illuminate\Support\Str::limit($message->subject, 20,'...')}}</td>
                <td>{{\Illuminate\Support\Str::limit($message->message, 20,'...')}}</td>
                <td>{{$message->created_at}}</td>
                <td>
                    <a href="/nova/resources/contacts/{{$message->id}}" class="cards-link">
                        Aperçu
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
