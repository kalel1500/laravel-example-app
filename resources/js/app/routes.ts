import { Route } from '@kalel1500/kalion-js';
import DefaultController from '../src/shared/infrastructure/DefaultController';
import PostController from "../src/posts/infrastructure/PostController";
import TagsController from "../src/tags/infrastructure/TagsController";

export function defineRoutes(): void {
    Route.page('home', [DefaultController, 'home']);
    Route.page('post.list', [PostController, 'posts']);
    Route.page('tags', [TagsController, 'tags'], true);
}
