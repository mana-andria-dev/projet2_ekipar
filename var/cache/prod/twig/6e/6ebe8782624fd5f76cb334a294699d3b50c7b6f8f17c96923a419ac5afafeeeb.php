<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0acca57c56c79d01fd113cf3f89dfb51dbfdd9aeebbfb8f9b0bdf94afe6e749a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <form 
                    action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" 
                    method=\"post\"
                    class=\"login100-form validate-form p-l-55 p-r-55 p-t-178\"
                >
                <form >
                    <span class=\"login100-form-title\">
                        Authentification
                    </span>

                    <div class=\"wrap-input100 validate-input m-b-16\" data-validate=\"Entrer votre login\">
                            ";
        // line 21
        if (($context["csrf_token"] ?? null)) {
            // line 22
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
                            ";
        }
        // line 24
        echo "
                            <input 
                                type=\"text\" 
                                id=\"username\" 
                                name=\"_username\" 
                                value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" 
                                required=\"required\" 
                                autocomplete=\"username\" 
                                class=\"input100\"
                                placeholder=\"Identifiant\"
                            />                        
                        <span class=\"focus-input100\"></span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Votre mot de passe\">
                            <input 
                                type=\"password\" 
                                id=\"password\" 
                                name=\"_password\" 
                                required=\"required\" 
                                autocomplete=\"current-password\"
                                class=\"input100\"
                                placeholder=\"Mot de passe\" 
                            />                        
                        <span class=\"focus-input100\"></span>
                    </div>

                    <!-- <div class=\"text-right p-t-13 p-b-23\">
                        <span class=\"txt1\">
                            Forgot
                        </span>

                        <a href=\"#\" class=\"txt2\">
                            Username / Password?
                        </a>
                    </div> -->

                    <br>
                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Connexion
                        </button>
                    </div>

                    <div class=\"flex-col-c p-t-170 p-b-40\">
                        <!-- <span class=\"txt1 p-b-9\">
                            Don’t have an account?
                        </span> -->

                        <a href=\"#\" class=\"txt3\">
                            EkipaR ®
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  58 => 24,  52 => 22,  50 => 21,  37 => 11,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
