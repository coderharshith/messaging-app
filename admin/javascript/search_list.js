const searchfn = () => {
    let filter = document.getElementById("searchuser").value.toUpperCase();

    let main_table = document.getElementById('main_table');
    
    let table_row = main_table.getElementsByTagName('tr');
 
    for(var i = 0; i< table_row.length;i++){
        let table_data =  table_row[i].getElementsByTagName('td')[3]; 

        if(table_data){
            let textvalue = table_data.textContent || table_data.innerHTML;
            
            if(textvalue.toUpperCase().indexOf(filter) > -1 ){
                table_row[i].style.display = "";
            }else{
                table_row[i].style.display = "none";
            }

        }
    }
}
