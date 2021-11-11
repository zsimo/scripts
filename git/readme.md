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

- checkout in a new remote branch
    ```git
    git fetch
    git checkout --track origin/feature/new_branch
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
    
- show all files involved in a commit 
    ```git
    git diff-tree --no-commit-id --name-only -r dsjfifjdksjdfjdsk
    ```
   
- add annotated tag
    ```git
    git tag -a v0.1 -m "demo version"
    git show v0.1
    # show all tags with messages
    git tag -n
    ```
- remove annotated tag
    ```git
    # locally
    git tag --delete tagname
    # remote
    git push --delete origin tagname
    ```
- clone a specific tag
    ```
    git clone <repo_url> --branch v1.1
    ```
- by default, the git push command does not transfer tags to remote servers
    ```git
    git push --tags
    git push origin master --tags
    ```

- change last commit message
    ```git
    git commit --amend -m "an updated commit message"
    ```
- revert to the previous commit
    ```git
    git reset --hard HEAD~1
    ```



