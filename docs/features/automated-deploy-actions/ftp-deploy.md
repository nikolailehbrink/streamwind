---
cover: ../../.gitbook/assets/image (1).png
coverY: -160.69261477045907
---

# FTP-Deploy

The FTP deployment action allows you to automatically deploy your theme to a server using the FTP protocol. This action uses the `SamKirkland/FTP-Deploy-Action@v4.3.4` to handle the file transfer.

To set up and use the FTP deployment action:

1. Update the `secrets` in the workflow file with your own FTP credentials:
   * Replace `${{ secrets.FTP_SERVER }}` with your FTP server's address.
   * Replace `${{ secrets.FTP_USERNAME }}` with your FTP username.
   * Replace `${{ secrets.FTP_PASSWORD }}` with your FTP password.
2. Customize the `exclude` section of the workflow file to match your project's file and folder exclusion requirements. By default, the action is set to exclude certain files and folders, such as `.git*`, `node_modules`, and other development-related files.
3.  To trigger the action on every push or pull request to the `main` branch, uncomment the following lines in the workflow file:\


    {% code title="ftp-deploy.yaml" %}
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

Once the workflow file is set up and pushed to your repository, you can manually trigger the FTP deployment from the Actions tab in your GitHub repository or automatically trigger it upon push or pull request events (if uncommented). The action will automatically check out the latest code, set up Node.js, install dependencies, build the project, and then sync files to the specified FTP server, excluding the files and folders specified in the `exclude` section.
