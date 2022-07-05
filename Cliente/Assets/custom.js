$(document).ready(function() {
    jquery_mask()

    var objPrice = $('[price]')

    let valor = parseFloat(objPrice.attr('price'))
    
    $('#quantity').change(function() {
        let qtd = parseFloat(this.value)
        let valor_final;

        valor_final = valor * qtd;
        objPrice.find('#get-price').text(valor_final.toFixed(2))

        console.log('qtd', qtd)
        console.log('valor', valor)
        console.log('valor_final', valor_final)
    });
    
});


function jquery_mask() {
    $('.money-mask').mask('000.000.000.000.000,00', {reverse: true});
}