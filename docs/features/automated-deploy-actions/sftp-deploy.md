---
cover: ../../.gitbook/assets/image (10).png
coverY: -182.24750499001996
---

# SFTP-Deploy

The SFTP deployment action allows you to automatically deploy your boilerplate theme to a server using the SFTP protocol. This action uses the `Dylan700/sftp-upload-action@latest` to handle the file transfer.

To set up and use the SFTP deployment action:

1. Update the `secrets` in the workflow file with your own SFTP credentials:
   * Replace `${{ secrets.SFTP_SERVER }}` with your SFTP server's address.
   * Replace `${{ secrets.SFTP_USERNAME }}` with your SFTP username.
   * Replace `${{ secrets.SFTP_PASSWORD }}` with your SFTP password.
2. Customize the `ignore` section of the workflow file to match your project's file and folder exclusion requirements. By default, the action is set to exclude certain files and folders, such as `.git*`, `node_modules`, and other development-related files.
3.  To trigger the action on every push or pull request to the `main` branch, uncomment the following lines in the workflow file:

    {% code title="sftp-deploy.yaml" %}
    ```yaml
    on:
      # Triggers the workflow on push or pull request events but only for the "main" branch
      #   push:
      #     branches: ["main"]
      #   pull_request:
      #     branches: ["main"]
    ```
    {% endcode %}
4. Commit and push the updated workflow file to your repository.

Once the workflow file is set up and pushed to your repository, you can manually trigger the SFTP deployment from the Actions tab in your GitHub repository or automatically trigger it upon push or pull request events (if uncommented). The action will automatically check out the latest code, set up Node.js, install dependencies, build the project, and then sync files to the specified SFTP server, excluding the files and folders specified in the `ignore` section.
