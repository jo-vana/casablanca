<?php

/* themes/custom/casablanca_theme/templates/menu--main.html.twig */
class __TwigTemplate_5f12d2907b295857df3a9a8efe30a461334f53272ebe8a3d5d6a2d1db6d323b4 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 43, "set" => 45);
        $filters = array();
        $functions = array("link" => 56);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["menus"] = $this;
            // line 31
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "        ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "            <nav role=\"navigation\">
                <div id=\"menuToggle\">
                    <input type=\"checkbox\" />
                        <span></span>
                        <span></span>
                        <span></span>
            <ul";
                    // line 39
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "menu", 1 => "nav", 2 => "navbar-nav"), "method"), "html", null, true));
                    echo ">
        ";
                } else {
                    // line 41
                    echo "                <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                    echo ">
        ";
                }
                // line 43
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 44
                    echo "            ";
                    // line 45
                    $context["item_classes"] = array(0 => (($this->getAttribute(                    // line 46
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 1 => ((($this->getAttribute(                    // line 47
$context["item"], "is_expanded", array()) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 48
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 51
                    echo "            ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 52
                        echo "            <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
                <a href=\"";
                        // line 53
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>
            ";
                    } else {
                        // line 55
                        echo "                <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                        echo ">
                ";
                        // line 56
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
            ";
                    }
                    // line 58
                    echo "            ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 59
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "nav", 1 => "navbar-nav"), "method"), (($context["menu_level"] ?? null) + 1))));
                        echo "
            ";
                    }
                    // line 61
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "        </ul>
        </ul>
        </div>
        </nav>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/casablanca_theme/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  143 => 61,  137 => 59,  134 => 58,  129 => 56,  124 => 55,  117 => 53,  112 => 52,  109 => 51,  107 => 48,  106 => 47,  105 => 46,  104 => 45,  102 => 44,  97 => 43,  91 => 41,  86 => 39,  78 => 33,  75 => 32,  72 => 31,  69 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/casablanca_theme/templates/menu--main.html.twig", "/var/www/html/docroot/themes/custom/casablanca_theme/templates/menu--main.html.twig");
    }
}
