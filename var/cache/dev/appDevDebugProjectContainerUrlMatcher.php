<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // api_users_get_collection
                if (preg_match('#^/api/users(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_users_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_collection_operation_name' => 'get',));
                }
                not_api_users_get_collection:

                // api_users_get_item
                if (preg_match('#^/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_users_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_users_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\User',  '_api_item_operation_name' => 'get',));
                }
                not_api_users_get_item:

            }

            elseif (0 === strpos($pathinfo, '/api/games')) {
                // api_games_get_collection
                if (preg_match('#^/api/games(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_games_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_games_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Game',  '_api_collection_operation_name' => 'get',));
                }
                not_api_games_get_collection:

                // api_games_post_collection
                if (preg_match('#^/api/games(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_games_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_games_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Game',  '_api_collection_operation_name' => 'post',));
                }
                not_api_games_post_collection:

                // api_games_get_item
                if (preg_match('#^/api/games/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_games_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_games_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Game',  '_api_item_operation_name' => 'get',));
                }
                not_api_games_get_item:

                // api_games_plays_get_subresource
                if (preg_match('#^/api/games/(?P<id>[^/]++)/plays(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_games_plays_get_subresource;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_games_plays_get_subresource')), array (  '_controller' => 'api_platform.action.get_subresource',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_subresource_operation_name' => 'api_games_plays_get_subresource',  '_api_subresource_context' =>   array (    'property' => 'plays',    'identifiers' =>     array (      0 =>       array (        0 => 'id',        1 => 'AppBundle\\Entity\\Game\\Game',        2 => true,      ),    ),    'collection' => true,    'operationId' => 'api_games_plays_get_subresource',  ),));
                }
                not_api_games_plays_get_subresource:

            }

            elseif (0 === strpos($pathinfo, '/api/gamer_players')) {
                // api_gamer_players_get_collection
                if (preg_match('#^/api/gamer_players(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_gamer_players_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_gamer_players_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\GamerPlayer',  '_api_collection_operation_name' => 'get',));
                }
                not_api_gamer_players_get_collection:

                // api_gamer_players_post_collection
                if (preg_match('#^/api/gamer_players(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_gamer_players_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_gamer_players_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\GamerPlayer',  '_api_collection_operation_name' => 'post',));
                }
                not_api_gamer_players_post_collection:

                // api_gamer_players_get_item
                if (preg_match('#^/api/gamer_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_gamer_players_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_gamer_players_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\GamerPlayer',  '_api_item_operation_name' => 'get',));
                }
                not_api_gamer_players_get_item:

                // api_gamer_players_put_item
                if (preg_match('#^/api/gamer_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_gamer_players_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_gamer_players_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\GamerPlayer',  '_api_item_operation_name' => 'put',));
                }
                not_api_gamer_players_put_item:

                // api_gamer_players_delete_item
                if (preg_match('#^/api/gamer_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_gamer_players_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_gamer_players_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\GamerPlayer',  '_api_item_operation_name' => 'delete',));
                }
                not_api_gamer_players_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/named_players')) {
                // api_named_players_get_collection
                if (preg_match('#^/api/named_players(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_named_players_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_named_players_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\NamedPlayer',  '_api_collection_operation_name' => 'get',));
                }
                not_api_named_players_get_collection:

                // api_named_players_post_collection
                if (preg_match('#^/api/named_players(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_named_players_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_named_players_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\NamedPlayer',  '_api_collection_operation_name' => 'post',));
                }
                not_api_named_players_post_collection:

                // api_named_players_get_item
                if (preg_match('#^/api/named_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_named_players_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_named_players_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\NamedPlayer',  '_api_item_operation_name' => 'get',));
                }
                not_api_named_players_get_item:

                // api_named_players_put_item
                if (preg_match('#^/api/named_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_named_players_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_named_players_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\NamedPlayer',  '_api_item_operation_name' => 'put',));
                }
                not_api_named_players_put_item:

                // api_named_players_delete_item
                if (preg_match('#^/api/named_players/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_named_players_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_named_players_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Player\\NamedPlayer',  '_api_item_operation_name' => 'delete',));
                }
                not_api_named_players_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/scored_turns')) {
                // api_scored_turns_get_collection
                if (preg_match('#^/api/scored_turns(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_scored_turns_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_scored_turns_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Turn\\ScoredTurn',  '_api_collection_operation_name' => 'get',));
                }
                not_api_scored_turns_get_collection:

                // api_scored_turns_post_collection
                if (preg_match('#^/api/scored_turns(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_scored_turns_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_scored_turns_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Turn\\ScoredTurn',  '_api_collection_operation_name' => 'post',));
                }
                not_api_scored_turns_post_collection:

                // api_scored_turns_get_item
                if (preg_match('#^/api/scored_turns/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_scored_turns_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_scored_turns_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Turn\\ScoredTurn',  '_api_item_operation_name' => 'get',));
                }
                not_api_scored_turns_get_item:

                // api_scored_turns_put_item
                if (preg_match('#^/api/scored_turns/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_scored_turns_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_scored_turns_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Turn\\ScoredTurn',  '_api_item_operation_name' => 'put',));
                }
                not_api_scored_turns_put_item:

                // api_scored_turns_delete_item
                if (preg_match('#^/api/scored_turns/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_scored_turns_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_scored_turns_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Turn\\ScoredTurn',  '_api_item_operation_name' => 'delete',));
                }
                not_api_scored_turns_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/plays')) {
                // api_plays_get_collection
                if (preg_match('#^/api/plays(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_plays_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_plays_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_collection_operation_name' => 'get',));
                }
                not_api_plays_get_collection:

                // api_plays_post_collection
                if (preg_match('#^/api/plays(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_plays_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_plays_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_collection_operation_name' => 'post',));
                }
                not_api_plays_post_collection:

                // api_plays_get_item
                if (preg_match('#^/api/plays/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_plays_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_plays_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_item_operation_name' => 'get',));
                }
                not_api_plays_get_item:

                // api_plays_put_item
                if (preg_match('#^/api/plays/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_plays_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_plays_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_item_operation_name' => 'put',));
                }
                not_api_plays_put_item:

                // api_plays_delete_item
                if (preg_match('#^/api/plays/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_plays_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_plays_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'AppBundle\\Entity\\Game\\Play\\Play',  '_api_item_operation_name' => 'delete',));
                }
                not_api_plays_delete_item:

            }

            // api_login_check
            if ('/api/login_check' === $pathinfo) {
                return array('_route' => 'api_login_check');
            }

            // gesdinet_jwt_refresh_token
            if ('/api/token/refresh' === $pathinfo) {
                return array (  '_controller' => 'gesdinet.jwtrefreshtoken:refresh',  '_route' => 'gesdinet_jwt_refresh_token',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
