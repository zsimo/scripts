- .tar
    ```sh
    # create
    tar -cvf output.tar /dirname
    # Extract
    tar -xvf output.tar [/dirname]
    ```


- pretty print json
    ```sh
    echo '{"foo": "lorem", "bar": "ipsum"}' | python -m json.tool
    ```
    
    
 - copy a folder and all it's content
     ```sh
     cp -r Code/website/ ./website
     ```   
     
    
 - create a symbolic link
     ```sh
     ln -s {/path/to/file-name} {link-name}
     ```   
     ```sh
     ln -s /shared/sales/data/file.txt sales.data.txt
     ```  
   
   
  - show porcess list filter by a given word
    ```sh
    ps -aux | grep node
    ```   


