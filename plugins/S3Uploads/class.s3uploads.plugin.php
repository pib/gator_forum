// This plugin is very-much hard-coded for this specific setup. It
// could be made to be configurable instead, but I can't be arsed to
// do that right now.

$PluginInfo['S3Uploads'] = array(
   'Description' => 'Stores Uploads on S3 instead of the local filesystem.',
   'Version' => '1.0',
   'RequiredPlugins' => FALSE, // This is an array of plugin names/versions that this plugin requires
   'HasLocale' => FALSE, // Does this plugin have any locale definitions?
   'RegisterPermissions' => FALSE, // Permissions that should be added for this plugin.
   'SettingsUrl' => FALSE, // Url of the plugin's settings page.
   'SettingsPermission' => FALSE, // The permission required to view the SettingsUrl.
   'Author' => "Paul Bonser",
   'AuthorEmail' => 'misterpib@gmail.com',
   'AuthorUrl' => 'http://probablyprogramming.com'
);

class S3Uploads extends Gdn_Plugin {
    private function remote_path($name) {
        return 's3://gator-uploads/' . $name;
    }
    public function Gdn_Upload_GetUrls_Handler(&$Sender) {
        $Sender->EventArguments['Urls'][''] = 'http://s3.amazonaws.com/gator-uploads'
    }

    public function Gdn_Upload_SaveAs_Handler(&$Sender) {
        $source = $Sender->EventArguments['Path'];
        $name = $Sender->EventArguments['Parsed']['Name'];
        $dest = $this->remote_path($name;)

        copy($source, $dest);
        unlink($source);

        $Sender->EventArguments['Handled'] = TRUE;
        return TRUE;
    }

    public function Gdn_Upload_CopyLocal_Handler(&$Sender) {
        $remote_path = $this->remote_path($name);
        $local_path = PATH_UPLOADS . '/' . $Sender->EventArguments['Parsed']['Name'];
        copy($remote_path, $local_path);
        $Sender->EventArguments['Path'] = $local_path;
        return TRUE;
    }

    public function Gdn_Upload_Delete_Handler(&$Sender) {
        $name = $Sender->EventArguments['Parsed']['Name'];
        $remote_path = $this->remote_path($name);
        unlink($remote_path);
        $Sender->EventArguments['Handled'] = TRUE;
        return TRUE;
    }
}