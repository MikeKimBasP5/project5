import { StyleSheet, Text, View, render} from 'react-native';
import { NavigationContainer,NavigationActions, StackActions, DefaultTheme } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import MaterialCommunityIcons from 'react-native-vector-icons/MaterialCommunityIcons';
import 'react-native-gesture-handler';
import About from '../compontent/about';
import Exercise from '../compontent/exercise';
import Exercises from '../compontent/exercises';
import Instellingen from '../compontent/instellingen';
import LanguageScreen from '../compontent/Language';
import Oefening from '../compontent/oefening';
import Oefeningen from '../compontent/oefeningen';
import Over from '../compontent/over';
import Settings from '../compontent/settings';
import web from '../compontent/web';
import App from '../App';
const Tab = createMaterialBottomTabNavigator();
const TabNL = createMaterialBottomTabNavigator();
const TabEN = createMaterialBottomTabNavigator();
const StackEN = createStackNavigator();

const MyTabsEN = () => {
  return (
    <TabEN.Navigator>
      <TabEN.Screen
        name="About"
        component={About}
        options={{
          headerShown: false,
          tabBarLabel: 'About',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="information-variant" color={color} size={24} />
          ),
        }}
      />
      <TabEN.Screen
        name="Exercises"
        component={StackInstructionEN}
        options={{
          tabBarLabel: 'Exercises',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="weight-lifter" color={color} size={24} />
          ),
        }}
      />
      <TabEN.Screen
        name="Settings"
        component={StackSettingsEN}
        options={{
          headerShown: false,
          tabBarLabel: 'Settings',
          tabBarIcon: ({ color }) => (
            <MaterialCommunityIcons name="cog" color={color} size={24} />
          ),
        }}
      />
    </TabEN.Navigator>
  );
}
const StackInstructionEN = () => {
  return (
    <StackEN.Navigator
      screenOptions={{
        headerShown: false
      }}>
      <StackEN.Screen
        name='ExercisesScreen'
        component={Exercises} />
      <StackEN.Screen
        name='ExerciseScreen'
        component={Exercise} />
    </StackEN.Navigator>
  )
}
const StackSettingsEN = () => {
    return (
        <StackEN.Navigator
            screenOptions={{
                headerShown: false
            }}>
            <StackEN.Screen
                name='settings'
                component={Settings} />
            <StackEN.Screen
                name='web'
                component={web} />
                <StackEN.Screen name="Home" component={App} />
        </StackEN.Navigator>
    )
}
const MyTheme = {
  ...DefaultTheme,
  colors: {
    ...DefaultTheme.colors,
    primary: '#bfedef',
  },
};
const AppEN = () => {
  return (

      <NavigationContainer  independent={true} theme={MyTheme}>
            <MyTabsEN />
          </NavigationContainer>

  );
}


export default AppEN;