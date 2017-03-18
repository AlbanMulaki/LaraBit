
                <footer>
                    <div class="pull-right">
                        @ {{ $settings['app_name']}} 
                        <b> v0.{{ shell_exec('git rev-list --count HEAD') }}</b>
                    </div>
                    <div class="clearfix"></div>
                </footer>