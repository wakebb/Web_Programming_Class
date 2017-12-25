$(document).ready(function () {

$("button").click(function(){
    $.ajax({
            url: "Books.xml",
            dataType: "xml",
            success: loadData
     });
    })
});

function loadData(xml) {
   $(xml).find('bookstore').children().each(function(){
        var title = $(this).find('title').text()
        var author = $(this).find('author').text()
        var year = $(this).find('year').text()
        var price = $(this).find('price').text()
        var output = '<tr>'
        output += '<td>'+title+'</td>';
        output += '<td>'+author+'</td>';
        output += '<td>'+year+'</td>';
        output += '<td>'+price+'</td>';
        output += '</tr>';
        $("tbody").append(output);
    });
     
}



