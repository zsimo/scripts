- See more information about a particular remote
    ```git
    git remote show [remote-name]
    ```
    ```git
    git remote show origin
    ```

- Create a new branch and switch into it
    ```git
    git checkout -b feature/new_branch
    ```

- Delete a local branch
    ```git
    git branch -d the_local_branch
    ```

- checkout in a new branch
    ```git
    git fetch
    git checkout --track origin/new_branch
    // to fix previous track error
    git branch new_branch -u origin/new_branch
    ```
- add remote
    ```git
    git remote add origin https://<username>@bitbucket.org/<username>/<repo_name>.git
    ```
- change remote
    ```git
    git remote set-url origin https://<username>@bitbucket.org/<username>/<repo_name>.git
    ```

- tell Git to convert CRLF to LF on commit
    ```git
    git config --global core.autocrlf input
    ```


