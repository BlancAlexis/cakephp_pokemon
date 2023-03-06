<h1>Card</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
    </tr>
    <?php foreach ($cards as $card): ?>
        <tr>
            <td>
                <?= $this->Html->link($card->namePokemon,['action'=>'view',$card->namePokemon])?>
                <?= $this->Html->link($card->typePokemon,['action'=>'view',$card->typePokemon])?>
                <?= $this->Html->link($card->prix,['action'=>'view',$card->prix])?>
                <?= $this->Html->link($card->stock,['action'=>'view',$card->stock])?>

            </td>
        </tr>
    <?php endforeach ?>
</table>
