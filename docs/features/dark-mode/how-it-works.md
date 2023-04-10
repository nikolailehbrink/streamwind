# How it works

The dark mode feature works as follows:

1. Upon initial page load, the script checks if a dark mode setting is stored in local storage.
2. If a setting is stored in local storage, the dark mode is activated or deactivated accordingly.
3. If no setting is stored in local storage, the dark mode is set based on the user's system preferences.
4. An event listener is added to listen for changes in the user's system preferences and adjusts the dark mode accordingly if the user has not manually changed the setting.
5. The user can manually change the dark mode using the dark mode toggle. This change will be stored in local storage and will persist across page reloads.
