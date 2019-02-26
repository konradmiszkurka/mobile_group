<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<div class="container">
    <table style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Api Id</th>
            <th>Tytuł</th>
            <th>Miasta</th>
        </tr>
        @foreach($data as $key => $ad)
            <tr>
               <td>{{$key}}</td>
                <td>{{$ad['api_id']}}</td>
                <td>{{$ad['title']}}</td>
            @foreach($ad['cities'] as $city)
                <td>{{$city}}</td>
            @endforeach
            </tr>
        @endforeach

    </table>
</div>
