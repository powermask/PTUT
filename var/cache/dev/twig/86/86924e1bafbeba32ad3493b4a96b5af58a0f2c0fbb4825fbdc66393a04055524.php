<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0e6c94996293795a39cf37d4f4f9f7cd6f0f4480a01afcf77fa000d801671c33 extends Twig_Template
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
        $__internal_da6d695852579eec7842dcb648e98d30357271648c27e20af62bcede5a834191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6d695852579eec7842dcb648e98d30357271648c27e20af62bcede5a834191->enter($__internal_da6d695852579eec7842dcb648e98d30357271648c27e20af62bcede5a834191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_05d4e65aa0939ac59a81a07670608493dfb157dfe0506221e878bbec15bbafa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d4e65aa0939ac59a81a07670608493dfb157dfe0506221e878bbec15bbafa9->enter($__internal_05d4e65aa0939ac59a81a07670608493dfb157dfe0506221e878bbec15bbafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_da6d695852579eec7842dcb648e98d30357271648c27e20af62bcede5a834191->leave($__internal_da6d695852579eec7842dcb648e98d30357271648c27e20af62bcede5a834191_prof);

        
        $__internal_05d4e65aa0939ac59a81a07670608493dfb157dfe0506221e878bbec15bbafa9->leave($__internal_05d4e65aa0939ac59a81a07670608493dfb157dfe0506221e878bbec15bbafa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}