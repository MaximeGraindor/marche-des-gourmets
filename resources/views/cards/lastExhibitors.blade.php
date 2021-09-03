<style>
    .agree{
        padding: 0.5rem 0.8rem;
        border-radius: 5px;
        background-color: #1a5818;
        color: white;
        text-decoration: none;
    }
    .no-agree{
        padding: 0.5rem 0.8rem;
        border-radius: 5px;
        background-color: #aa2121;
        color: white;
        text-decoration: none;
    }
</style>

<div>
    <h2 class="mb-3">
        Les dernières candidatures
    </h2>
    <table class="table w-full table-default">
        <thead style="text-align: left">
            <th>id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Nom de la société</th>
            <th>Email</th>
            <th>téléphone</th>
            <th>Pays</th>
            <th>Code postal</th>
            <th>Localité</th>
            <th>Site web</th>
            <th>Validé</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($exhibitors as $exhibitor)
            <tr>
                <td>{{$exhibitor->id}}</td>
                <td>{{$exhibitor->name}}</td>
                <td>{{$exhibitor->firstname}}</td>
                <td>{{$exhibitor->company_name}}</td>
                <td>{{$exhibitor->email}}</td>
                <td>{{$exhibitor->telephone}}</td>
                <td>{{$exhibitor->country}}</td>
                <td>{{$exhibitor->postal_code}}</td>
                <td>{{$exhibitor->location}}</td>
                <td>{{$exhibitor->website}}</td>
                <td>
                    <span class="{{$exhibitor->agree ? "agree" : "no-agree"}}">{{$exhibitor->agree ? "Validé" : "Non validé"}}</span>
                </td>
                <td>
                    <a href="/nova/resources/exhibitors/{{$exhibitor->id}}" class="cards-link">
                        Aperçu
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
