function cestaRemoverProduto(idpedido, idproduto, item) {
    $('#form-remover-produto input[name="pedido_id"]').value = idpedido;
    $('#form-remover-produto input[name="produto_id"]').value = idproduto;
    $('#form-remover-produto input[name="item"]').value(item);
    $('#form-remover-produto').submit();
}

function cestaAdicionarProduto(idproduto) {
    $('#form-adicionar-produto input[name="id"]').value(idproduto);
    $('#form-adicionar-produto').submit();
}