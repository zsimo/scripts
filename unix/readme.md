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
   
   
  - show process list filter by a given word
    ```sh
    ps -aux | grep node
    kill 123456 -9
    ```
  - get process list showing in a tree
    ```sh
    htop
    # F4 to filter
    # key up / down to select the root process
    # F9 to kill
    ```

  - search file by name
    ```sh
    find . -iname saml.php
    ```




