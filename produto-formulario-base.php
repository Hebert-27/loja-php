<tr>
    <td>Nome do produto:</td>
    <td><input type="text" class="form-control" name="nome" value="<?= $produto['nome'] ?>" /><br /></td>
</tr>
<tr>
    <td>Preço:</td>
    <td><input type="text" class="form-control" name="preco" value="<?= $produto['preco'] ?>" /><br /></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
</tr>
<tr>
    <td><input type="checkbox" name="usado" <?= $usado ?> value="true"/>Usado</td>
</tr>
<tr>
    <td>Categoria:</td>
    <td>
        <select name="categoria_id">
        <?php 
        foreach($categorias as $categoria){ 
            $essaEhAcategoria = $produto['categoria_id'] == $categoria['id'];
            $selecao = $essaEhAcategoria ? "selected='selected'" : "";
        ?>
        <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
            <?= $categoria['nome'] ?>
        </option>
        <?php 
        }
        ?>
        </select>
    </td>
</tr>