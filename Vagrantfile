base_box = ENV['VAGRANT_BOX'] || 'IL Appraisal - ENV'
base_box_url = ENV['VAGRANT_BOX_URL'] || 'http://big-name.s3.amazonaws.com/bn-quantal64-lamp.box'

home_path = ENV['HOME']

Vagrant::Config.run do |config|
    config.vm.box = base_box
    config.vm.box_url = base_box_url

    # for best results add "10.10.10.10 app.local"
    # or something like it to your hosts file
    config.vm.network :hostonly, "10.10.10.10"

    # /vagrant is the folder in which the current path is mounted
    # permissions are set so that non-Windows machines won't have
    # to mess with permissions
    config.vm.share_folder("vagrant-root", "/vagrant", ".", :mount_options => ["dmode=777","fmode=777"])

    config.vm.provision :chef_solo do |chef|

        # these settings assume that you have vagrant-chef as
        # a submodule in your app in the vagrant-chef folder

        chef.cookbooks_path = "vagrant-chef/chef/cookbooks"
        chef.data_bags_path = "vagrant-chef/chef/data_bags"

        chef.add_recipe "apt"
        chef.add_recipe "git"
        chef.add_recipe "apache2"
        chef.add_recipe "apache2::mod_rewrite"
        chef.add_recipe "apache2::mod_ssl"
        chef.add_recipe "mysql::server"
        chef.add_recipe "php"
        chef.add_recipe "php::module_mysql"
        chef.add_recipe "php::module_apc"
        chef.add_recipe "php::module_sqlite3"
        chef.add_recipe "php::module_gd"
        chef.add_recipe "chef-php-extra"
        chef.add_recipe "apache2::mod_php5"
        chef.add_recipe "database::mysql"
        chef.add_recipe "apache-sites"
        chef.add_recipe "mysql-databases"
        chef.add_recipe "composer"
        chef.add_recipe "phpunit"

        chef.json.merge!({
            "mysql" => {
                "server_root_password" => "password",
                "server_debian_password" => "password",
                "server_repl_password" => "password",
                "bind_address" => "127.0.0.1"
            },
            # options for mysql-databases cookbook
            # will create these databases
            "databases" => {
                "create" => ["db_name"]
            },
            # options for apache-sites cookbook
            # options are default or legacy
            # check out the data_bags folder to see details
            "sites" => ["default"]
        })

    end
end

# uncomment a section and set it up as necessary
Vagrant::Config.run do |config|
    # permissions for the application's storage folder
#    config.vm.provision :shell do |shell|
#        shell.inline = "chmod 777 -R /vagrant/app/storage"
#    end
end
