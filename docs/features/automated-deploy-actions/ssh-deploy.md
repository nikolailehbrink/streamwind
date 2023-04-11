---
cover: ../../.gitbook/assets/image (8).png
coverY: -302.16566866267465
---

# SSH-Deploy

The SSH deployment action allows you to automatically deploy your boilerplate theme to a server using the SSH protocol and `rsync`. This action uses the `SamKirkland/web-deploy@v1` to handle the file transfer.

To set up and use the SSH deployment action:

1. Copy the SSH deployment code provided in the previous response and paste it into your existing GitHub Actions workflow file.
2. Update the `secrets` in the workflow file with your own SSH credentials:
   * Replace `${{ secrets.SSH_SERVER }}` with your SSH server's address.
   * Replace `${{ secrets.SSH_USERNAME }}` with your SSH username.
   * Replace `${{ secrets.SSH_KEY }}` with your private SSH key.
3. Customize the `rsync-options` section of the workflow file to match your project's file and folder exclusion requirements. By default, the action is set to exclude certain files and folders using an `rsync-exclude.txt` file.
4.  To trigger the action on every push or pull request to the `main` branch, uncomment the following lines in the workflow file:\


    {% code title="ssh-deploy.yaml" %}
    ```yaml
    on:
      # Triggers the workflow on push or pull request events but only for the "main" branch
      #   push:
      #     branches: ["main"]
      #   pull_request:
      #     branches: ["main"]  
    ```
    {% endcode %}


5. Commit and push the updated workflow file to your repository.

Once the workflow file is set up and pushed to your repository, you can manually trigger the SSH deployment from the Actions tab in your GitHub repository or automatically trigger it upon push or pull request events (if uncommented). The action will automatically check out the latest code, set up Node.js, install dependencies, build the project, and then sync files to the specified SSH server using `rsync`, excluding the files and folders specified in the `rsync-exclude.txt` file.

\
