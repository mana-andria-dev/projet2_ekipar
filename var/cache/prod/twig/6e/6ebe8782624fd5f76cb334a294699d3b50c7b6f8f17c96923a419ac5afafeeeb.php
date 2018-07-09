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


<div class=\"container\">
    <div class=\"row vertical-offset-100\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Please sign in</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            ";
        // line 20
        if (($context["csrf_token"] ?? null)) {
            // line 21
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
                            ";
        }
        // line 23
        echo "
                            <input 
                                type=\"text\" 
                                id=\"username\" 
                                name=\"_username\" 
                                value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" 
                                required=\"required\" 
                                autocomplete=\"username\" 
                                class=\"form-control\"
                                placeholder=\"Pseudo\"
                            />
                        </div>
                        <div class=\"form-group\">
                            <input 
                                type=\"password\" 
                                id=\"password\" 
                                name=\"_password\" 
                                required=\"required\" 
                                autocomplete=\"current-password\"
                                class=\"form-control\"
                                placeholder=\"Password\" 
                            />
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                Rester connecter
                                <input 
                                    type=\"checkbox\" 
                                    id=\"remember_me\" 
                                    name=\"_remember_me\" 
                                    value=\"on\" 
                                />
                            </label>
                        </div>
                        <input 
                            type=\"submit\" 
                            id=\"_submit\" 
                            name=\"_submit\" 
                            value=\"Connecter\"
                            class=\"btn btn-lg btn-success btn-block\"
                        />
                    </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
";
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
        return array (  64 => 28,  57 => 23,  51 => 21,  49 => 20,  43 => 17,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
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
