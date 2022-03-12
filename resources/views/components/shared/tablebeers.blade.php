<table class="table">
    <tr>
        <th>Name</th>
        <th>Tagline</th>
        <th>First Brewed</th>
        <th>Image</th>
    </tr>
    @foreach($data as $res)

    <tr>
        <td>
            <?= $res['name']; ?>
        </td>
        <td>
            <?= $res['tagline']; ?>
        </td>
        <td>
            <?= $res['first_brewed']; ?>
        </td>

        <td>
            <img style="height: 40px;width:40px;border-radius: 50%;" src='<?= $res['image_url']; ?>' />
        </td>

    </tr>

    @endforeach
</table>